// Javascript
/* const root = document.querySelector('#root');

      const element = document.createElement('h1');
      element.textContent = 'Hello from JS';
      element.className = 'heading-1';

      root.appendChild(element); */

const root = document.querySelector('#root');

// const element = React.createElement('h1', {
// children: 'Hello from React!',
// className: 'heading-1',
// });

const text1 = React.createElement('p', {
  children: 'Hello Paragraph 1',
});

const text2 = React.createElement('p', {
  children: 'Hello Paragraph 2',
});

/*const element = React.createElement('div', {
        children: [text1, text2],
      });*/

const element = React.createElement('div', {
  children: [text1, text2],
});

ReactDOM.render(element, root);
