import { configureStore } from "@reduxjs/toolkit";
import freezerReducer from "./freezerSlice";

const store = configureStore({
  reducer: {
    freezer: freezerReducer,
  },
});

export default store;
