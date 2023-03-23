import StickyNavbar from "../components/navbar/StickyNavbar";
import { Booking } from "../components/calendars/Calendar";
function App() {

  return (
    <>
      <StickyNavbar />
      <Booking/>
      <div className="bg-red-400">
          <h1 className="text-4xl font-bold underline">
            Hello world!
          </h1>
          <p className="text-slate-600 text-xl">I wish this Tailwinf styling would finally work....</p>
      </div>
    </>
  )
}

export default App;