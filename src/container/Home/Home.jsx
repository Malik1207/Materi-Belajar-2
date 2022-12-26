// Libraries
import React, { Component, createContext, Fragment } from "react";
import { BrowserRouter as Router, Route, Link, Routes, useParams } from "react-router-dom";

// Pages
// import YoutubeComp from "../../component/YoutubeComponent/Component";
import BlogPost from "../pages/BlogPost/BlogPost";
import Product from "../pages/Product/Component";
import LifeCycleComp from "../pages/LifeCycleComp/LifeCycleComp";
import YoutubeCompPage from "../pages/YoutubeCompPage/YoutubeCompPage";

// Style
import "./Home.css";
import DetailPost from "../pages/BlogPost/DetailPost/DetailPost";

export const RootContext = createContext();
const Provider = RootContext.Provider;

class Home extends Component {
  state = {
    totalOrder: 5,
  };
  // state = {
  //   showComponent: true,
  // };

  // componentDidMount() {
  // setTimeout(() => {
  //   this.setState({
  //     showComponent: false,
  //   });
  // }, 15000);
  // }

  render() {
    return (
      <Router>
        <Provider value={this.state}>
          {/* <div>
          <p>Youtube Component</p>
          <hr />
          <YoutubeComp time="7.12" title="Tutorial React JS - Bagian 1" desc="2x ditonton, 2 hari yang lalu" />
          <YoutubeComp time="8.82" title="Tutorial React JS - Bagian 2" desc="200x ditonton, 5 hari yang lalu" />
          <YoutubeComp time="5.04" title="Tutorial React JS - Bagian 3" desc="10x ditonton, 9 hari yang lalu" />
          <YoutubeComp time="4.12" title="Tutorial React JS - Bagian 4" desc="90x ditonton, 10 hari yang lalu" />
          <YoutubeComp />
          <Product />
          {this.state.showComponent ? <LifeCycleComp /> : null}
          <h1 style={{ paddingLeft: 20 }}>Post</h1>
          <hr />
          <BlogPost />
        </div> */}
          <Fragment>
            <div className="navigation">
              <Link to="/">Blog Post</Link>
              <Link to="/product">Product</Link>
              <Link to="/lifecycle">LifeCycle</Link>
              <Link to="/youtube-component">Youtube</Link>
            </div>
            <Routes>
              <Route path="/" exact element={<BlogPost />} />
              <Route path="/detail-post/:postID" exact element={<DetailPost />} />
              <Route path="/product" element={<Product />} />
              <Route path="/lifecycle" element={<LifeCycleComp />} />
              <Route path="/youtube-component" element={<YoutubeCompPage />} />
            </Routes>
          </Fragment>
        </Provider>
      </Router>
    );
  }
}

export default Home;
