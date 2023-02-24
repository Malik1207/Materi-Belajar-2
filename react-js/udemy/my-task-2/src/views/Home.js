import React, { Component } from "react";
import { Link } from "react-router-dom";
import MainLayout from "../layouts/MainLayout";

export default class Home extends Component {
  state = {
    skills: [
      {
        id: 1,
        name: "Javascript",
        description: "Javascript Description",
        image: require("../image/javascript.png"),
      },
      {
        id: 2,
        name: "React",
        description: "React Description",
        image: require("../image/react.png"),
      },
      {
        id: 3,
        name: "Vue",
        description: "Vue Description",
        image: require("../image/vue.png"),
      },
      {
        id: 4,
        name: "Svelte",
        description: "Svelte Description",
        image: require("../image/svelte.png"),
      },
    ],
  };

  render() {
    const { skills } = this.state;
    return (
      <MainLayout>
        <h1 style={{ paddingLeft: "6rem" }}>Home Page</h1>
        <div style={container}>
          {skills.map((item) => (
            <div key={item.id}>
              <Link to={`/detail/${item.id}`}>
                <img src={item.image} alt={item.name} />
                <h3>{item.name}</h3>
              </Link>
            </div>
          ))}
        </div>
      </MainLayout>
    );
  }
}

const container = {
  display: "flex",
  padding: "0 6rem",
  justifyContent: "space-between",
};
