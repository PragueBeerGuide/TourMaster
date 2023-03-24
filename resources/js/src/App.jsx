import StickyNavbar from "../components/navbar/StickyNavbar";
import TourSummary from "../components/tour/TourSummary";
import Footer from "../components/footer/Footer";
import { Booking } from "../components/calendars/Calendar";

function App() {

  return (
    <>
      <StickyNavbar />
      
      <Booking/>
    
      <TourSummary />

      <Footer />
    </>
  )
}

export default App;