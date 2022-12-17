const e = React.createElement;

// Display a "Like" <button>
function LikeButton() {
   return e(
     'button',
     { onClick: () => alert("Button Work") },
     'Like'
   );
}

const domContainer = document.querySelector('#like_button_container');
const root = ReactDOM.createRoot(domContainer);
root.render(e(LikeButton));