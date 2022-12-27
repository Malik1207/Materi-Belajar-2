import clsx from 'clsx';

export default function Button({ className = 'bg-black', children, text, type = 'submit', ...props }) {
    //  const { className = 'bg-blue-600', children, text, type = 'submit' } = props;
    return (
        // <button {...props} className={`${className} [&>svg]:w-5 [&>svg]:h-5 [&>svg]:stroke-1 flex items-center gap-x-2 bg-blue-600 text-white px-4 py-2 rounded`}>
        <button
            {...props}
            type={type}
            className={clsx(
                className,
                '[&>svg]:w-5 [&>svg]:h-5 [&>svg]:stroke-1 inline-flex whitespace-nowrap justify-center items-center gap-x-2 text-white px-4 h-full py-2 rounded'
            )}>
            {text || children}
        </button>
    );
}
