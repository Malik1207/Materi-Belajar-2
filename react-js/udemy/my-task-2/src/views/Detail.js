import React, { Component } from "react";
import { Link, useParams } from "react-router-dom";
import MainLayout from "../layouts/MainLayout";

function withRouter(Component) {
  function ComponentWithRouter(props) {
    let { id } = useParams();
    return <Component {...props} params={id} />;
  }
  return ComponentWithRouter;
}

class Detail extends Component {
  state = {
    skills: [
      {
        id: 1,
        name: "Javascript",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
        image: require("../image/javascript.png"),
      },
      {
        id: 2,
        name: "React",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
        image: require("../image/react.png"),
      },
      {
        id: 3,
        name: "Vue",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
        image: require("../image/vue.png"),
      },
      {
        id: 4,
        name: "Svelte",
        description: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",
        image: require("../image/svelte.png"),
      },
    ],
    data: "",
  };

  componentDidMount() {
    const id = this.props.params;
    const data = this.state.skills.find((item) => item.id === parseInt(id));
    //  console.log(data);
    this.setState({ data });
  }

  render() {
    const { data } = this.state;
    return (
      <MainLayout>
        <div style={container}>
          <h1>{data.name}</h1>
          <div style={box}>
            <img style={img} src={data.image} alt={data.image} />
            <div>
              <p>{data.description}</p>
              <Link to="/">Back Home</Link>
            </div>
          </div>
        </div>
      </MainLayout>
    );
  }
}

export default withRouter(Detail);

const container = {
  padding: "0 6rem",
};

const img = {
  marginRight: "2rem",
};

const box = {
  display: "flex",
};
