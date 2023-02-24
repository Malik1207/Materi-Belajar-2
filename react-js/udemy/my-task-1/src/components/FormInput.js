import React, { useState } from "react";
import Button from "./Button";
import "../styles/FormInput.css";
import PropTypes from "prop-types";
import { useDispatch } from "react-redux";
import { add } from "../store";

// class FormInput extends React.Component {
//   state = {
//     text: "",
//   };

//   change = (e) => {
//     this.setState({ text: e.target.value });
//   };

//   submit = (e) => {
//     e.preventDefault();
//     if (this.state.text !== "") {
//       this.props.add(this.state.text);
//     }
//     this.setState({
//       text: "",
//     });
//   };

//   render() {
//     return (
//       <form style={formInput}>
//         <div className="form-input">
//           <input type="text" placeholder="Add Task" onChange={this.change} value={this.state.text} />
//         </div>
//         <Button text="Add" variant="primary" action={this.submit} />
//       </form>
//     );
//   }
// }

function FormInput() {
  const [text, setText] = useState("");
  const dispatch = useDispatch();
  const change = (e) => {
    setText(e.target.value);
  };
  const submit = (e) => {
    e.preventDefault();
    console.log("Ok");
    if (text !== "") {
      dispatch(add(text));
    }
    setText("");
  };
  return (
    <form style={formInput}>
      <div className="form-input">
        <input type="text" placeholder="Add Task" onChange={change} value={text} />
      </div>
      <Button text="Add" variant="primary" action={submit} />
    </form>
  );
}

export default FormInput;

// Style Internal
const formInput = {
  background: "#fff",
  color: "#fff",
  display: "flex",
  alignItems: "center",
  height: "3rem",
  padding: "0 1rem",
  justifyContent: "space-between",
  margin: "0.5rem 0",
};
