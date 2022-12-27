import React, { Component } from "react";
import { GlobalConsumer } from "../../context/context";
// import { RouteContext } from "react-router/dist/lib/context";
// import { connect, Connect } from "react-redux";
// import ActionType from "../../redux/reducer/globalActionType";
import { RootContext } from "../Home/Home";

class Counter extends Component {
  //   state = {
  //     order: 4,
  //   };

  //   handleCounterChange = (newValue) => {
  //     this.props.onCounterChange(newValue);
  //   };

  //   handlePlus = () => {
  //     this.setState(
  //       {
  //         order: this.state.order + 1,
  //       },
  //       () => {
  //         this.handleCounterChange(this.state.order);
  //       }
  //     );
  //   };

  //   handleMinus = () => {
  //     if (this.state.order > 0) {
  //       this.setState(
  //         {
  //           order: this.state.order - 1,
  //         },
  //         () => {
  //           this.handleCounterChange(this.state.order);
  //         }
  //       );
  //     }
  //   };

  render() {
    // console.log(this.props);
    return (
      // <RootContext.Consumer>
      //   {(value) => {
      //     console.log("value: ", value);
      //     return (
      <div className="counter">
        <button className="minus" /*onClick={this.props.handleMinus}*/ onClick={() => /*value.dispatch({ type: "MINUS_ORDER" })*/ this.props.dispatch({ type: "MINUS_ORDER" })}>
          -
        </button>
        <input type="text" /*value={this.props.order}*/ value={/*value.state.totalOrder*/ this.props.state.totalOrder} />
        <button className="plus" /*onClick={this.props.handlePlus}*/ onClick={() => /*value.dispatch({ type: "PLUS_ORDER" })*/ this.props.dispatch({ type: "PLUS_ORDER" })}>
          +
        </button>
      </div>
      //     );
      //   }}
      // </RootContext.Consumer>
    );
  }
}

// const mapStateToProps = (state) => {
//   return {
//     order: state.totalOrder,
//   };
// };

// const mapDispatchToProps = (dispatch) => {
//   return {
//     handlePlus: () => dispatch({ type: ActionType.PLUS_ORDER }),
//     handleMinus: () => dispatch({ type: ActionType.MINUS_ORDER }),
//   };
// };

// export default connect(mapStateToProps, mapDispatchToProps)(Counter);
export default GlobalConsumer(Counter);
