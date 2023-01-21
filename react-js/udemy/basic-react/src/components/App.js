import React from "react";
// import Button from "./Button";
// import Header from "./Header";
// import List from "./List";
import "../style/App.css";

class App extends React.Component {
  // state = {
  //   name: "This is Why I need You?",
  //   author: "Brian Krisna",
  //   // book: {
  //   //   name: "This is Why I need You?",
  //   //   author: "Brian Krisna",
  //   // },
  //   //  Array
  //   // book: ["This is Why I need You?", "Brian Krisna"],
  // };
  render() {
    return (
      <div>
        {/* <h1>Hello World</h1> */}

        {/* <Header /> */}

        {/* <List name={this.state.name} author={this.state.author} /> */}

        {/* <List name="Abdul Malik" origin="Kalimantan Timur" myBook={this.state.book}>
          This is Children
        </List> */}

        {/* <h4>Judul : {this.state.name}</h4>
        <h4>Author : {this.state.author}</h4> */}

        {/* <h4>Judul : {this.state.book.name}</h4>
        <h4>Author : {this.state.book.author}</h4> */}

        {/* {this.state.book.map((item) => (
          <div>
            <h4>{item}</h4>
          </div>
        ))} */}

        {/* <Button color="blue" /> */}

        {/* Styling Inline */}
        {/* <div style={{ width: "100px", backgroundColor: "purple" }}>
          <h1 style={mystyle}>Hello World</h1>
        </div> */}

        {/* Styling External */}
        <div className="box">
          <h1>Hello World</h1>
        </div>
      </div>
    );
  }
}

// const App = () => {
//   return (
//     <div>
//       <h1>Hello World</h1>
//     </div>
//   );
// };

// Styling Internal
const mystyle = {
  color: "blue",
  fontSize: "50px",
};

export default App;
