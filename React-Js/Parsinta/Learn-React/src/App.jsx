import Button from './components/Button';
import PlaceContentCenter from './components/PlaceContentCenter';
import { useRef, useState } from 'react';
import Counter from './components/Counter';
import Card from './components/Card';
import { IconBrandGithub } from '@tabler/icons';
import Input from './components/Input';
import Label from './components/Label';
import Todo from './components/Todo';
import useJoke from './hooks/useJoke';

// const App = (props) => {
// const App = () => {
//     const type = 'submit';
//     const onClick = () => console.log('Login with another style....');
//     return (
//         <div className='bg-slate-400 text-slate-800 tracking-tight antialiased flex items-center justify-center min-h-screen'>
//             <div className='max-w-2xl w-full'>
//                 {/* <Button {...{ type, onClick }}>
//                     <IconBrandFacebook />
//                     Login
//                 </Button> */}
//                 {/* <Button className='bg-pink-600' onClick={() => console.log('Login')} type='button'>
//                     <IconBrandTwitter />
//                     Login
//                 </Button> */}
//                 {/* <Button className='bg-black' onClick={() => console.log('Login')} type='button'>
//                     <IconBrandGithub />
//                     Login
//                 </Button> */}
//                 <Card>
//                     <Card.Title>Hello React</Card.Title>
//                     <Card.Body>
//                         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque explicabo, incidunt alias laudantium autem distinctio, tempora
//                         voluptatibus vero provident aliquid iusto unde dolores fugit quisquam.
//                     </Card.Body>
//                     <Card.Footer>
//                         <Button>Register</Button>
//                     </Card.Footer>
//                 </Card>
//             </div>
//         </div>
//     );
// };

// const Title = () => <h1 className='text-white'>Hello World</h1>;

// export default App;

// EXTRACT TO COMPONENT
// export default function App() {
//     return (
//         <PlaceContentCenter>
//             <Counter initialValue={10} />
//         </PlaceContentCenter>
//     );
// }

// USE STATE WITH OBJECT
// export default function App() {
//     // const [name, setName] = useState('');
//     // const [email, setEmail] = useState('');
//     const [form, setForm] = useState({
//         name: '',
//         email: '',
//     });

//     function onChange(event) {
//         setForm({ ...form, [event.target.name]: event.target.value });
//     }

//     function submit(event) {
//         event.preventDefault();
//         console.log(form);
//     }

//     return (
//         <PlaceContentCenter>
//             <Card>
//                 <Card.Title>Sign up for new account!</Card.Title>
//                 <form onSubmit={submit}>
//                     <Card.Body>
//                         <div className='mb-5 border rounded-lg p-4'>
//                             {/* <p>Name: {name}</p>
//                         <p>Email: {email}</p> */}
//                             <p>Name: {form.name}</p>
//                             <p>Email: {form.email}</p>
//                         </div>
//                         <div className='mb-6'>
//                             <Label htmlFor='name' value={'Name'} />
//                             <Input value={form.name} onChange={onChange} id='name' name='name' />
//                         </div>
//                         <div className='mb-6'>
//                             <Label htmlFor='email' value={'Email'} />
//                             <Input value={form.email} onChange={onChange} id='email' name='email' />
//                         </div>
//                     </Card.Body>
//                     <Card.Footer>
//                         <Button>
//                             <IconBrandGithub />
//                             Register
//                         </Button>
//                     </Card.Footer>
//                 </form>
//             </Card>
//         </PlaceContentCenter>
//     );
// }

// STATE MANIPULATION
// function App() {
//     return (
//         <PlaceContentCenter>
//             <Todo />
//         </PlaceContentCenter>
//     );
// }
// export default App;

// MEET USE REF
// function App() {
//     const inputRef = useRef(null);
//     //  const [tick, setTick] = useState(0);
//     function handleClick() {
//         inputRef.current.focus();
//         //   tick.current = tick.current + 1;
//         //   console.log(tick.current);
//         //   const nextTick = tick + 1;
//         //   setTick(nextTick);
//         //   console.log(nextTick);
//     }
//     return (
//         <PlaceContentCenter>
//             <Card>
//                 <Card.Title>useRef Hooks</Card.Title>
//                 <Card.Body>
//                     <div className='block space-y-4'>
//                         <Input isFocused className='border' placeholder='Masukkan Email' />
//                         <Input className='border' placeholder='Masukkan Password' />
//                         <Button onClick={handleClick}>Tick</Button>
//                     </div>
//                 </Card.Body>
//                 {/* <Card.Footer>You Clicked {tick.current} times.</Card.Footer> */}
//             </Card>
//         </PlaceContentCenter>
//     );
// }
// export default App;

// HELLO USE EFFECT
// function App(props) {
//     const [name, setName] = useState('');
//     const [online, setOnline] = useState(false);
//     const [scrollPosition, setScrollPosition] = useState(window.scroll);

//     useEffect(() => {
//         //   console.log('I Always rendered');
//     });

//     useEffect(() => {
//         //   console.log('First Render');
//     }, []);

//     useEffect(() => {
//         //   console.log(`I am now ${online ? 'online' : 'offline'}.`);
//     }, [online]);

//     function updateScrollPosition() {
//         const windowScrolling = window.scrollY;
//         console.log(`Window Scroll Position: ${windowScrolling}`);
//         setScrollPosition(windowScrolling);
//     }

//     //  function onKeyDown(e) {}

//     useEffect(() => {
//         window.addEventListener('scroll', updateScrollPosition);
//         //   window.addEventListener('keydown', onKeyDown);
//         //   return () => {
//         //       window.removeEventListener('keydown', onKeyDown);
//         //   };
//     }, []);

//     return (
//         <PlaceContentCenter>
//             <div className='h-[4000px]'>
//                 <Input value={name} onChange={(e) => setName(e.target.value)} />
//                 <Button onClick={() => setOnline((online) => !online)}>Set Online</Button>
//             </div>
//         </PlaceContentCenter>
//     );
// }
// export default App;

// AJAX AND API
// function App(props) {
//     const [loading, setLoading] = useState(false);
//     const [users, setUsers] = useState([]);

//     useEffect(() => {
//         async function getUsers() {
//             setLoading(true);
//             // const response = await fetch('https://jsonplaceholder.typicode.com/users');
//             // const data = await response.json();
//             try {
//                 const { data } = await axios('https://jsonplaceholder.typicode.com/users');
//                 setUsers(data);
//                 setLoading(false);
//             } catch (error) {
//                 console.log('Something went wrong.');
//                 setLoading(false);
//             }
//         }

//         getUsers().then((r) => r);
//     }, []);

//     return (
//         <PlaceContentCenter>
//             <Card>
//                 <Card.Title>User: {users.length}</Card.Title>
//                 <Card.Body>
//                     {loading ? (
//                         <div>Loading ....</div>
//                     ) : (
//                         <ol>
//                             {users.map((user) => (
//                                 <li key={user.id}>
//                                     {user.name} ({user.username})
//                                 </li>
//                             ))}
//                         </ol>
//                     )}
//                 </Card.Body>
//             </Card>
//         </PlaceContentCenter>
//     );
// }
// export default App;

// CUSTOM HOOKS
function App(props) {
    const nameRef = useRef();
    const [name, setName] = useState('Malix');
    const joke = useJoke(name);
    const generateJoke = (e) => {
        e.preventDefault();
        setName(nameRef.current.value);
    };

    return (
        <PlaceContentCenter>
            <Card>
                <Card.Title>Joke</Card.Title>
                <Card.Body>
                    <p className='mb-4'> {joke.valueOf}</p>
                    <Input ref={nameRef} />
                </Card.Body>
                <Card.Footer>
                    <Button onClick={generateJoke}>Generate a Joke</Button>
                </Card.Footer>
            </Card>
        </PlaceContentCenter>
    );
}
export default App;
