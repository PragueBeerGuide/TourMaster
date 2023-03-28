import StickyNavbar from "../../components/navbar/StickyNavbar";
import TourSummary from "../../components/tour/TourSummary";
import Footer from "../../components/footer/Footer";
import { Booking } from "../../components/calendars/Calendar";
import Testimonial from "../../components/testimonial/Testimonial";
import PhoneNumberInput from "../../components/form/PhoneNumberInput";

export default function Home() {

    return(
      <>
        <StickyNavbar />
        <PhoneNumberInput />
        <div className="flex flex-col-reverse md:flex-row">
          <Testimonial />
          <Booking/>
        </div>
        
        <TourSummary />

        <Footer />
      </>
    )
}