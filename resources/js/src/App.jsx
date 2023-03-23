import Calendar from 'react-calendar';
import { Hero } from '../components/header/Header';
import StickyNavbar from '../components/navbar/Navbar'



function App() {

  return (

    <div className="App">
      <StickyNavbar/>
      <Calendar/>
    </div>
  )
}

export default App;