import { useState } from 'react'

import './App.css'
import Calendar from 'react-calendar';
import { Route } from 'react-router-dom';

function App() {
  const [count, setCount] = useState(0)

  return (
    <div className="App">
      <Calendar/>
    </div>
  )
}

export default App
