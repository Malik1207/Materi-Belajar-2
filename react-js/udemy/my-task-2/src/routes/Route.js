import React from "react";
import { Route, Routes } from "react-router-dom";
import About from "../views/About";
import Contact from "../views/Contact";
import Detail from "../views/Detail";
import Home from "../views/Home";
import NotFound from "../views/NotFound";

const Router = () => {
  return (
    <React.Fragment>
      <Routes>
        <Route path="/" exact element={<Home />} />
        <Route path="/about" exact element={<About />} />
        <Route path="/contact" exact element={<Contact />} />
        <Route path="/detail/:id" exact element={<Detail />} />
        <Route path="*" element={<NotFound />} />
      </Routes>
    </React.Fragment>
  );
};

export default Router;
