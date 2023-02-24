import React from "react";
import { useDispatch, useSelector } from "react-redux";
import { del } from "../store/actions/lists";

const Todos = () => {
  const todos = useSelector((state) => state.lists.todos);
  const dispatch = useDispatch();
  const delData = (id) => {
    dispatch(del(id));
  };
  //   console.log(todos);
  return (
    <ul>
      {todos.map((item) => (
        <li key={item.id}>
          {item.title}
          <span style={{ margin: "0 20px", color: "red", cursor: "pointer" }} onClick={() => delData(item.id)}>
            x
          </span>
        </li>
      ))}
    </ul>
  );
};

export default Todos;
