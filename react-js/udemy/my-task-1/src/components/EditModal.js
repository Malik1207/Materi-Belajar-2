import React from "react";
import Button from "./Button";
import "../styles/EditModal.css";
import PropTypes from "prop-types";
import { useDispatch, useSelector } from "react-redux";
import { cls, dta, set, upd } from "../store";

// class EditModal extends React.Component {
//   render() {
//     const { edit, close, data, change, update } = this.props;
//     if (edit) {
//       return (
//         <div className="modal-container">
//           <div className="modal-box">
//             <h3>Edit Task</h3>
//             <div className="input">
//               <input type="text" value={data.title} onChange={change} />
//             </div>
//             <div className="btn-group">
//               <Button text="Ok" variant="primary" action={update} />
//               <Button text="Cancel" variant="warning" action={close} />
//             </div>
//           </div>
//         </div>
//       );
//     } else {
//       return null;
//     }
//   }
// }

function EditModal(/*{ edit, close, change, data, update }*/) {
  const isEdit = useSelector((state) => state.lists.isEdit);
  const dispatch = useDispatch();
  const close = () => {
    dispatch(cls());
  };

  const change = (e) => {
    dispatch(set(e.target.value));
  };

  const update = () => {
    dispatch(upd());
  };

  const data = () => {
    dispatch(dta());
  };

  if (isEdit) {
    return (
      <div className="modal-container">
        <div className="modal-box">
          <h3>Edit Task</h3>
          <div className="input">
            <input type="text" value={data.title} onChange={change} />
          </div>
          <div className="btn-group">
            <Button text="Ok" variant="primary" action={update} />
            <Button text="Cancel" variant="warning" action={close} />
          </div>
        </div>
      </div>
    );
  } else {
    return null;
  }
}

export default EditModal;
