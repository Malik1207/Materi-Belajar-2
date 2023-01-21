import { useState } from 'react';
import Button from './Button';

export default function Counter({ initialValue }) {
    // const [name, setName] = useState('Abdul');
    const [count, setCount] = useState(initialValue);

    function handleClick() {
        // setName('Malik');
        setCount((prevState) => prevState + 1);
    }

    return (
        <div>
            {/* <div>{name}</div> */}
            <div className='text-5xl font-bold'>{count}</div>
            <div className='mt-5 flex items-center gap-2'>
                <Button onClick={handleClick}>+1</Button>
                <Button
                    onClick={() => {
                        handleClick();
                        handleClick();
                        handleClick();
                    }}>
                    +3
                </Button>
            </div>
        </div>
    );
}
