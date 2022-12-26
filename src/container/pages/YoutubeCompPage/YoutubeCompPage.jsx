import React, { Component } from "react";
import YoutubeComp from "../../../component/YoutubeComponent/Component";

export default class YoutubeCompPage extends Component {
  render() {
    return (
      <div>
        <div style={{ margin: 50 }}>
          <p>Youtube Component</p>
          <hr style={{ margin: "30px 0px" }} />
          <YoutubeComp time="7.12" title="Tutorial React JS - Bagian 1" desc="2x ditonton, 2 hari yang lalu" />
          <YoutubeComp time="8.82" title="Tutorial React JS - Bagian 2" desc="200x ditonton, 5 hari yang lalu" />
          <YoutubeComp time="5.04" title="Tutorial React JS - Bagian 3" desc="10x ditonton, 9 hari yang lalu" />
          <YoutubeComp time="4.12" title="Tutorial React JS - Bagian 4" desc="90x ditonton, 10 hari yang lalu" />
          <YoutubeComp />
        </div>
      </div>
    );
  }
}
