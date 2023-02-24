import React from "react";
import MainLayout from "../layouts/MainLayout";

const NotFound = () => {
  return (
    <MainLayout>
      <div style={container}>
        <h1>404 Not Found Page</h1>
      </div>
    </MainLayout>
  );
};

export default NotFound;

const container = {
  position: "absolute",
  top: "50%",
  left: "50%",
  textAlign: "center",
  transform: "translate(-50%, -50%)",
  color: "grey",
};
