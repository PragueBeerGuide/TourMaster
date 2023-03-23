import Calendar from 'react-calendar';
import React, { useState } from 'react';
import { Hero } from '../components/header/Header';
import "../../css/app.css";


function App() {
const [value, onChange] = useState(new Date())
  return (
<>
<div className="Sample">
      <header>
        <h1>react-calendar sample page</h1>
      </header>
      <div className="Sample__container">
        <main className="Sample__container__content">
          <Calendar onChange={onChange} showWeekNumbers value={value} />
        </main>
      </div>
    </div>
    {/* <div className="App">
      <Hero/>
    
      <Calendar/>
    </div>

<h1 className="text-4xl font-bold underline">
Hello world!
</h1> */}
</>
  )
}

export default App;