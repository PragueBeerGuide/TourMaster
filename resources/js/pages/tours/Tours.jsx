import StickyNavbar from "../../components/navbar/StickyNavbar";
import TourSummary from "../../components/tour/TourSummary";
import Footer from "../../components/footer/Footer";
import { Booking } from "../../components/calendars/Calendar";
import Testimonial from "../../components/testimonial/Testimonial";

export default function Tours() {

    return(
      <>
        <StickyNavbar />
        
        <TourSummary />

        <Footer />
      </>
    )
}