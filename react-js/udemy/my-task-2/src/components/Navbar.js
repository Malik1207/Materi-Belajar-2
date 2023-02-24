import React from "react";
import { Link } from "react-router-dom";

const Navbar = () => {
  return (
    <div style={nav}>
      <h1>Kodeakademia</h1>
      <ul style={ul}>
        <li>
          <Link style={link} to="/">
            Home
          </Link>
        </li>
        <li>
          <Link style={link} to="/about">
            About
          </Link>
        </li>
        <li>
          <Link style={link} to="/contact">
            Contact
          </Link>
        </li>
      </ul>
    </div>
  );
};

export default Navbar;

const nav = {
  display: "flex",
  background: "#fe024e",
  padding: "0 6rem",
  justifyContent: "space-between",
  color: "#fff",
  alignItems: "center",
};

const ul = {
  listStyle: "none",
  display: "flex",
  justifyContent: "space-between",
  width: "20%",
  textDecoration: "none",
};

const link = {
  textDecoration: "none",
  color: "white",
};
