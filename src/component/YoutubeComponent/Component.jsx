import React from "react";
import "./Component.css";

// Dynamic Component Menggunakan Props
const YoutubeComp = (props) => {
  return (
    <div className="youtube-wrapper">
      <div className="img-thumb">
        <img src="https://i.ytimg.com/vi/cRIAl70eiT4/hqdefault.jpg?sqp=-oaymwEcCNACELwBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBWBPnl0o2zlfbEGXXzOpVEpwf8SA" alt="" />
        <p className="time">{props.time}</p>
      </div>
      <p className="title">{props.title}</p>
      <p className="desc">{props.desc}</p>
    </div>
  );
};

YoutubeComp.defaultProps = {
  time: "00.00",
  title: "Title Here",
  desc: "xx ditonton, x hari yang lalu",
};

export default YoutubeComp;
