function Card({ children }) {
    return <div className='shadow rounded-lg overflow-hidden bg-white'>{children}</div>;
}

function Title({ children }) {
    return (
        <div className='border-b p-4'>
            <h1 className='text-xl'>{children}</h1>
        </div>
    );
}

function Body({ children }) {
    return <div className='leading-relaxed p-4'>{children}</div>;
}

function Footer({ children }) {
    return <h1 className='bg-slate-50 p-4'>{children}</h1>;
}

Card.Title = Title;
Card.Body = Body;
Card.Footer = Footer;

export default Card;
