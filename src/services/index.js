// import axios from "axios";
import Post from "./Post";
import Get from "./Get";
import Put from "./Put";
import Delete from "./Delete";

// Config
// const RootPath = "http://localhost:3004";
// const OnlineRoot = "https://jsonplaceholder.typicode.com";

// POST
// const Post = (path, root, data) => {
//   const promise = new Promise((resolve, reject) => {
//     axios.post(`${root ? OnlineRoot : RootPath}/${path}`, data).then(
//       (result) => {
//         resolve(result);
//       },
//       (err) => {
//         reject(err);
//       }
//     );
//   });
//   return promise;
// };

// GET
// const Get = (path, root) => {
//   const promise = new Promise((resolve, reject) => {
//     axios.get(`${root ? OnlineRoot : RootPath}/${path}`).then(
//       (result) => {
//         resolve(result.data);
//       },
//       (err) => {
//         reject(err);
//       }
//     );
//   });
//   return promise;
// };

// POST
const postNewsBlog = (data) => Post("posts", false, data);

// GET
const getNewsBlog = () => Get("posts?_sort=id&_order=desc", false);
const getComments = () => Get("comments", true);

// PUT
const updateNewsBlog = (data, id) => Put(`posts/${id}`, false, data);

// DELETE
const deleteNewsBlog = (id) => Delete(`posts/${id}`, false);

const API = {
  postNewsBlog,
  getNewsBlog,
  getComments,
  updateNewsBlog,
  deleteNewsBlog,
};

export default API;
