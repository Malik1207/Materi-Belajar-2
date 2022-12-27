import axios, { Axios } from "axios";
import React, { Component } from "react";
import { useParams } from "react-router";
import "./DetailPost.css";

function withRouter(Component) {
  function ComponentWithRouter(props) {
    let params = useParams();
    return <Component {...props} params={params} />;
  }
  return ComponentWithRouter;
}

class DetailPost extends Component {
  state = {
    post: {
      title: "",
      body: "",
    },
  };
  componentDidMount() {
    // console.log(this.props.params);
    let id = this.props.params.postID;
    axios.get(`http://localhost:3004/posts/${id}`).then((res) => {
      console.log("result: ", res);
      let post = res.data;
      this.setState({
        post: {
          title: post.title,
          body: post.body,
        },
      });
    });
  }
  render() {
    // console.log(this.props.params.postID);
    return (
      <div className="p-detail-post">
        <p>Detail Post</p>
        <hr style={{ margin: "30px 0px" }} />
        <p className="detail-title">{this.state.post.title}</p>
        <p className="detail-body">{this.state.post.body}</p>
      </div>
    );
  }
}

export default withRouter(DetailPost);
