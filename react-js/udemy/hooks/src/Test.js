import React, { Component } from 'react';

export default class Test extends Component {
  state = {
    angka: 0,
  };

  plus = () => {
    this.setState({
      angka: this.state.angka + 1,
    });
  };

  min = () => {
    this.setState({
      angka: this.state.angka - 1,
    });
  };

  render() {
    return (
      <div>
        <center>
          <h1>State without Hooks</h1>
          <h3>{this.state.angka}</h3>
          <button
            style={{ margin: '0 10px' }}
            onClick={this.plus}>
            +
          </button>
          <button
            style={{ margin: '0 10px' }}
            onClick={this.min}>
            -
          </button>
        </center>
      </div>
    );
  }
}
