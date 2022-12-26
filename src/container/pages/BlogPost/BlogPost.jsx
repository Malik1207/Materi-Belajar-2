import React, { Component, Fragment } from "react";
import Post from "../../../component/Post/Post";
import axios from "axios";
import "./BlogPost.css";

class BlogPost extends Component {
  state = {
    post: [],
    formBlogPost: {
      id: 1,
      title: "",
      body: "",
      userId: 1,
    },
    isUpdate: false,
  };

  getPostAPI = () => {
    axios.get("http://localhost:3004/posts?_sort=id&_order=desc").then((result) => {
      this.setState({
        post: result.data,
      });
    });
  };

  postDataToAPI = () => {
    axios.post("http://localhost:3004/posts", this.state.formBlogPost).then(
      (res) => {
        console.log(res);
        this.getPostAPI();
        this.handleFormChangeClear();
      },
      (err) => {
        console.log("error :", err);
      }
    );
  };

  putDataToAPI = () => {
    axios.put(`http://localhost:3004/posts/${this.state.formBlogPost.id}`, this.state.formBlogPost).then((res) => {
      console.log(res);
      this.getPostAPI();
      this.handleFormChangeClear();
    });
  };

  handleRemove = (data) => {
    // console.log(data);
    axios.delete(`http://localhost:3004/posts/${data}`).then((res) => {
      this.getPostAPI();
    });
  };

  handleUpdate = (data) => {
    console.log(data);
    this.setState({
      formBlogPost: data,
      isUpdate: true,
    });
    // axios.put(`http://localhost:3004/posts/${data}`, this.state.formBlogPost).then((res) => {
    //   console.log(res);
    //   this.getPostAPI();
    // });
  };

  handleFormChange = (event) => {
    // console.log("form change", event.target);
    let formBlogPostNew = { ...this.state.formBlogPost };
    // console.log("init state: ", this.state.formBlogPost);
    // console.log("new value: ", formBlogPostNew);
    // console.log(event.target.name);
    let timestamp = new Date().getTime();
    // console.log(timestamp);
    if (!this.state.isUpdate) {
      formBlogPostNew["id"] = timestamp;
    }
    formBlogPostNew[event.target.name] = event.target.value;
    // let title = event.target.value;
    this.setState(
      {
        formBlogPost: formBlogPostNew,
      },
      () => {
        // console.log("value object formBlogPost: ", this.state.formBlogPost);
      }
    );
  };

  handleFormChangeClear = () => {
    let formBlogPostNew = { ...this.state.formBlogPost };
    formBlogPostNew["id"] = "";
    formBlogPostNew["userId"] = "";
    formBlogPostNew["title"] = "";
    formBlogPostNew["body"] = "";

    this.setState(
      {
        formBlogPost: formBlogPostNew,

        isUpdate: false,
      },
      () => {}
    );
  };

  handleSubmit = () => {
    // console.log(this.state.formBlogPost);
    if (this.state.isUpdate) {
      this.putDataToAPI();
    } else {
      this.postDataToAPI();
    }
  };

  // handleDetail = (id) => {
  //   this.props.history.push(`/detail-post/${id}`);
  // };

  componentDidMount() {
    // fetch("http://localhost:3004/posts")
    //   .then((response) => response.json())
    //   // .then((json) => console.log(json));
    //   .then((json) => {
    //     this.setState({
    //       post: json,
    //     });
    //   });
    // axios.get("http://localhost:3004/posts").then((result) => {
    //   this.setState({
    //     post: result.data,
    //   });
    // });
    this.getPostAPI();
  }

  render() {
    return (
      <Fragment>
        <div className="container">
          <p>Blog Post</p>
          <hr style={{ margin: "30px 0px" }} />
          <div className="form-add-post">
            <label htmlFor="title">Title</label>
            <input type="text" name="title" placeholder="Add Title" onChange={this.handleFormChange} value={this.state.formBlogPost.title} />
            <label htmlFor="body">Blog Content</label>
            <textarea name="body" id="body" cols="30" rows="10" placeholder="Add Blog" onChange={this.handleFormChange} value={this.state.formBlogPost.body}></textarea>
            <button className="btn-submit" onClick={this.handleSubmit}>
              Simpan
            </button>
          </div>
          {this.state.post.map((post) => {
            return <Post key={post.id} data={post} remove={this.handleRemove} update={this.handleUpdate} /*goDetail={this.handleDetail}*/ />;
          })}
        </div>
      </Fragment>
    );
  }
}

export default BlogPost;
