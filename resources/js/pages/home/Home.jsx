import StickyNavbar from "../../components/navbar/StickyNavbar";
import TourSummary from "../../components/tour/TourSummary";
import Footer from "../../components/footer/Footer";
import CustomCalendar from "../../components/calendars/Calendar";
import { useState } from "react";
import moment from "moment";


export default function Home() {
  const [tourID, setTourID] = useState(0);

    return(
      <>
        <StickyNavbar />
        
        <div className="flex flex-col-reverse md:flex-row">
          {/* <Testimonial /> */}
          <TourSummary />
        </div>

            <Footer />
        </>
    );
}
