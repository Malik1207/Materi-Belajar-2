import { forwardRef, useEffect, useRef } from 'react';

// export default function Input({ type = 'text', ...props }) {
//     return (
//         <input
//             {...props}
//             className='transition duration-300 w-full focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400 border-slate-300 shadow-sm rounded-lg'
//             type={type}
//         />
//     );
// }

// const Input = forwardRef(({ type = 'text', ...props }, ref) => {
// const Input = ({ isFocused = false, type = 'text', ...props }) => {
//     const inputRef = useRef(null);

//     useEffect(() => {
//         if (isFocused) {
//             inputRef.current.focus();
//         }
//     }, []);
//     return (
//         <input
//             // ref={ref}
//             ref={inputRef}
//             {...props}
//             className='transition duration-300 w-full focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400 border-slate-300 shadow-sm rounded-lg'
//             type={type}
//         />
//     );
// };
const Input = forwardRef(({ type = 'text', ...props }, ref) => (
    <input
        ref={ref}
        {...props}
        className='transition duration-300 w-full focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400 border-slate-300 shadow-sm rounded-lg'
        type={type}
    />
));
export default Input;
