import React from "react";
import PropTypes from "prop-types";
import Button from "./Button";
import { useDispatch, useSelector } from "react-redux";
import { del, opn } from "../store";

const TodoItem = () => {
  const todos = useSelector((state) => state.lists.todos);
  const dispatch = useDispatch();
  const delData = (id) => {
    dispatch(del(id));
  };
  const delById = (id) => {
    delData(id);
  };

  const opnData = (id, data) => {
    dispatch(opn(id, data));
  };

  const opnById = (id, data) => {
    opnData(id, data);
  };

  return (
    <div>
      {todos.map((item) => (
        <div key={item.id} style={todoItem}>
          <p>{item.title}</p>
          <div>
            <Button text="edit" variant="success" action={() => opnById(item.id, item.data)} />
            <Button text="delete" variant="warning" action={() => delById(item.id)} />
          </div>
        </div>
      ))}
    </div>
  );
};

TodoItem.propTypes = {
  todos: PropTypes.object.isRequired,
  delData: PropTypes.func.isRequired,
};

export default TodoItem;

const todoItem = {
  background: "#2da4f8",
  color: "#fff",
  display: "flex",
  alignItems: "center",
  height: "3rem",
  padding: "0 1rem",
  justifyContent: "space-between",
  margin: "0.5rem 0",
};
