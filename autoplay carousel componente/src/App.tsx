import "./App.css";
import "./components/Components.css";

// https://codepen.io/studiojvla/pen/qVbQqW

function App() {
  return (
    <>
    <h1 className="font-black text-5xl selection:bg-fuchsia-300 selection:text-fuchsia-900 text-center">
          My skills and power up’s
        </h1>
      <section className="max-w-8xl mx-32 m-auto py-14">
      
        {/* Technologies Icon */}

        <div className="h-56 m-auto w-full">
          <div className="flex flex-row gap-16 mt-12 overflow-hidden">
            <div className="technologies-icon-cards">
              <img
                src="./wordpress-icon.png"
                className="technologies-icon-img"
              />
              <span className="technologies-icon-cards-description">
                WORDPRESS
              </span>
            </div>
            <div className="technologies-icon-cards">
              <img
                src="./javascript-icon.png"
                className="technologies-icon-img"
              />
              <span className="technologies-icon-cards-description">
                JAVASCRIPT
              </span>
            </div>
            <div className="technologies-icon-cards">
              <img
                src="./tailwind-css-icon.png"
                className="technologies-icon-img"
              />
              <span className="technologies-icon-cards-description">
                TAILWIND CSS
              </span>
            </div>

            <div className="technologies-icon-cards">
              <img src="./nodejs-icon.png" className="technologies-icon-img" />
              <span className="technologies-icon-cards-description">
                NODE JS
              </span>
            </div>

            <div className="technologies-icon-cards">
              <img src="./react-icon.png" className="technologies-icon-img" />
              <span className="technologies-icon-cards-description">
                REACT JS
              </span>
            </div>
            <div className="technologies-icon-cards">
              <img src="./git-icon.png" className="technologies-icon-img" />
              <span className="technologies-icon-cards-description">GIT</span>
            </div>

            <div className="technologies-icon-cards">
              <img
                src="./photoshop-icon.png"
                className="technologies-icon-img"
              />
              <span className="technologies-icon-cards-description">
                ADOBE PHOTOSHOP
              </span>
            </div>

            <div className="technologies-icon-cards">
              <img
                src="./illustrator-icon.png"
                height="140"
                width="140"
                alt=""
              />
              <span className="technologies-icon-cards-description">
                ADOBE ILLUSTRATOR
              </span>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}

export default App;