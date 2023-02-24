import { useSelector, useDispatch } from "react-redux";
import { tambahJumlahEsBatu } from "./store/freezerSlice";

export default function Header() {
  const dispatch = useDispatch();
  const { jumlahEsBatu } = useSelector((state) => state.freezer.freezer);

  return (
    <div>
      <h3>Ini Header</h3>
      <p>{jumlahEsBatu}</p>
      <button onClick={() => dispatch(tambahJumlahEsBatu())}></button>
    </div>
  );
}
