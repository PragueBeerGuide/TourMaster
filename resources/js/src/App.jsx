import StickyNavbar from "../components/navbar/StickyNavbar";
import TourSummary from "../components/tour/TourSummary";
import Footer from "../components/footer/Footer";
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
          <p className="text-slate-600 text-xl">I wish this Tailwind styling would finally work....</p>
      </div>
      <TourSummary />

      <Footer />
    </>
  )
}

export default App;