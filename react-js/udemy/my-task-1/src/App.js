import React, { useEffect, useState } from "react";
import TodoItem from "./components/TodoItem";
import FormInput from "./components/FormInput";
import logo from "./logo.svg";
import "./App.css";
import EditModal from "./components/EditModal";
import { Provider, useDispatch, useSelector } from "react-redux";
import store, { del } from "./store";

// class App extends React.Component {
// state = {
//   todos: [
//     {
//       id: 1,
//       title: "Reading a book",
//     },
//     {
//       id: 2,
//       title: "Workout training",
//     },
//   ],
//   isEdit: false,
//   isDelete: false,
//   editData: {
//     id: "",
//     title: "",
//   },
// };

//   update = () => {
//     const { id, title } = this.state.editData;
//     const newData = { id, title };
//     const newTodos = this.state.todos;
//     newTodos.splice(id - 1, 1, newData);
//     this.setState({
//       todos: newTodos,
//       isEdit: false,
//       editData: {
//         id: "",
//         title: "",
//       },
//     });
//   };

//   setTitle = (e) => {
//     this.setState({
//       editData: {
//         ...this.state.editData,
//         title: e.target.value,
//       },
//     });
//   };

//   openModal = (id, data) => {
//     this.setState({
//       isEdit: true,
//       editData: {
//         id,
//         title: data,
//       },
//     });
//   };

//   closeModal = () => {
//     this.setState({
//       isEdit: false,
//     });
//   };

//   deleteTask = (id) => {
//     this.setState({
//       todos: this.state.todos.filter((item) => item.id !== id),
//       isDelete: false,
//     });
//   };

//   addTask = (data) => {
//     const id = this.state.todos.length;
//     const newData = {
//       id: id + 1,
//       title: data,
//     };
//     this.setState({
//       todos: [...this.state.todos, newData],
//     });
//   };

//   render() {
//     const { todos } = this.state;
//     return (
//       <div className="app">
//         <div className="logo">
//           <img src={logo} alt="logo" />
//           <h3>Task List</h3>
//         </div>

//         <div className="list">
//           {todos.map((item) => (
//             <TodoItem key={item.id} todo={item} open={this.openModal} openDel={this.openDelModal} del={this.deleteTask} />
//           ))}
//         </div>

//         <div className="form-input">
//           <FormInput add={this.addTask} />
//         </div>

//         <EditModal edit={this.state.isEdit} close={this.closeModal} change={this.setTitle} data={this.state.editData} update={this.update} />
//       </div>
//     );
//   }
// }

function App() {
  // const [todos, setTodos] = useState([
  //   {
  //     id: 1,
  //     title: "Reading a book",
  //   },
  //   {
  //     id: 2,
  //     title: "Workout training",
  //   },
  // ]);

  // const [isEdit, setIsEdit] = useState(false);
  // const [isDelete, setIsDelete] = useState(false);
  // const [editData, setEditData] = useState({ id: "", title: "" });

  // const update = (e) => {
  //   const { id, title } = editData;
  //   const newData = { id, title };
  //   const newTodos = todos;
  //   console.log(newTodos);
  //   newTodos.splice(id - 1, 1, newData);
  //   setTodos(newTodos);
  //   setIsEdit(false);
  //   const updateData = {
  //     ...editData,
  //     id: "",
  //     title: "",
  //   };
  //   setEditData(updateData);
  // };

  // const setTitle = (e) => {
  //   setEditData({
  //     ...editData,
  //     title: e.target.value,
  //   });
  // };

  // const openModal = (id, data) => {
  //   setIsEdit(true);
  //   setEditData({
  //     id,
  //     title: data,
  //   });
  // };

  // const closeModal = () => {
  //   setIsEdit(false);
  // };

  // const deleteTask = (id) => {
  //   setTodos((arr) => [...arr.filter((item) => item.id !== id)]);
  //   setIsDelete(false);
  // };

  // const addTask = (data) => {
  //   const id = todos.length;
  //   const newData = {
  //     id: id + 1,
  //     title: data,
  //   };
  //   setTodos([...todos, newData]);
  // };

  return (
    <Provider store={store}>
      <div className="app">
        <div className="logo">
          <img src={logo} alt="logo" />
          <h3>Task List</h3>
        </div>

        <div className="list">
          <TodoItem />
        </div>

        <div className="form-input">
          <FormInput />
        </div>

        <EditModal /*edit={isEdit} close={closeModal} change={setTitle} data={editData} update={update}*/ />
      </div>
    </Provider>
  );
}

export default App;
