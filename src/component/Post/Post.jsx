import React from "react";
import { useNavigate } from "react-router-dom";

const Post = (props) => {
  const navigate = useNavigate();

  return (
    <div className="post">
      <div style={{ marginRight: 10 }}>
        <img src="https://source.unsplash.com/random/300x300/?coding" alt="" />
      </div>
      <div className="content">
        <p className="title" onClick={() => navigate(`/detail-post/${props.data.id}`)}>
          {props.data.title}
        </p>
        <p className="desc">{props.data.body}</p>
        <button className="update" onClick={() => props.update(props.data)}>
          Update
        </button>
        <button className="remove" onClick={() => props.remove(props.data.id)}>
          Remove
        </button>
      </div>
    </div>
  );
};

export default Post;
