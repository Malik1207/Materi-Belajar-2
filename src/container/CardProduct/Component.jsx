import { Component, Fragment } from "react";
import Counter from "./Counter";

class CardProduct extends Component {
  render() {
    return (
      <Fragment>
        <div className="card">
          <div className="img-thumb-prod">
            <img src="https://cf.shopee.co.id/file/139708ba62cb68d9b9cd80dd7d0a94b6" alt="" />
          </div>
          <p className="product-title">Daging Ayam Berbumbu Rasa Original Plus Tepung Crispy (1 Cartoon - 10 Pack)</p>
          <p className="product-price">Rp 410,000</p>
          <Counter /*onCounterChange={(value) => this.props.onCounterChange(value)}*/ />
        </div>
      </Fragment>
    );
  }
}

export default CardProduct;
