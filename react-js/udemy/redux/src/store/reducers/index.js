import { combineReducers } from "redux";
import listReducer from "./lists";
import productReducer from "./products";

export default combineReducers({
  lists: listReducer,
  products: productReducer,
});
