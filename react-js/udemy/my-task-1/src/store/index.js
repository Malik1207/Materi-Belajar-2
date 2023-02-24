import { createStore, combineReducers } from "redux";
import { composeWithDevTools } from "redux-devtools-extension";

// Actions
export const add = (title) => {
  return {
    type: "ADD",
    payload: title,
  };
};

export const del = (id) => {
  return {
    type: "DEL",
    payload: id,
  };
};

export const opn = (id, data) => {
  return {
    type: "OPN",
    payload: id,
    payload_data: data,
  };
};

export const cls = () => {
  return {
    type: "CLS",
  };
};

export const upd = () => {
  return {
    type: "UPD",
  };
};

export const set = (e) => {
  return {
    type: "SET",
    payload: e,
  };
};

export const dta = () => {
  return {
    type: "DTA",
  };
};

// Reducer
const initialState = {
  todos: [
    {
      id: 1,
      title: "Reading a book",
    },
    {
      id: 2,
      title: "Workout training",
    },
  ],
  isEdit: false,
  editData: {
    id: "",
    title: "",
  },
};

const listReducer = (state = initialState, action) => {
  const { type, payload, payload_data } = action;
  switch (type) {
    case "ADD":
      const newItem = {
        id: state.todos.length + 1,
        title: payload,
      };
      return {
        ...state,
        todos: [...state.todos, newItem],
      };
    case "DEL":
      return {
        ...state,
        todos: state.todos.filter((item) => item.id !== payload),
      };

    case "OPN":
      return {
        ...state,
        isEdit: true,
        editData: { ...state.editData, payload, title: payload_data },
      };
    case "CLS":
      return {
        ...state,
        isEdit: false,
      };
    case "UPD":
      const { id, title } = state.editData;
      const newData = { id, title };
      const newTodos = state.todos.splice(id - 1, 1, newData);
      const updateData = {
        ...state.editData,
        id: "",
        title: "",
      };
      return {
        ...state,
        todos: [...state.todos, newTodos],
        isEdit: false,
        updateData,
      };
    case "SET":
      // const setTitle = {
      //   title: payload.target.value,
      // };
      return {
        ...state,
        // editData: { ...state.editData, setTitle },
      };

    case "DTA":
      const data = state.editData.title;
      return {
        ...state,
        data,
      };
    default:
      return state;
  }
};

const rootReducer = combineReducers({
  lists: listReducer,
});

const store = createStore(rootReducer, composeWithDevTools());

export default store;
