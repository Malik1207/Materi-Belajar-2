import logo from "./logo.svg";
import { Provider } from "react-redux";
import "./App.css";
import Todos from "./components/Todos";
import Form from "./components/Form";
import store from "./store";

function App() {
  return (
    <Provider store={store}>
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <h4>Belajar Redux</h4>
        <Todos />
        <Form />
      </header>
    </Provider>
  );
}

export default App;
