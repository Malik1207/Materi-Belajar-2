import logo from './logo.svg';
import './App.css';
import { useState } from 'react';

function App() {
  const [angka, setAngka] = useState(0);
  const [text, setText] = useState('');
  const [arr, setArr] = useState([
    {
      id: 1,
      title: 'This is Array',
    },
  ]);
  const [obj, setObj] = useState({ name: 'This is Object' });

  const plus = () => {
    setAngka(angka + 1);
  };
  const min = () => {
    setAngka(angka - 1);
  };

  return (
    <div style={{ marginTop: '30px' }}>
      <center>
        <h1>State with Hooks</h1>
        <h3>{angka}</h3>
        <button
          style={{ margin: '0 10px' }}
          onClick={plus}>
          +
        </button>
        <button
          style={{ margin: '0 10px' }}
          onClick={min}>
          -
        </button>
      </center>
    </div>
  );
}

export default App;
