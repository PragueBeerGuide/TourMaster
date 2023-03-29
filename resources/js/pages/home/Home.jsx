import StickyNavbar from "../../components/navbar/StickyNavbar";
import TourSummary from "../../components/tour/TourSummary";
import Footer from "../../components/footer/Footer";
import CustomCalendar from "../../components/calendars/Calendar";
import { useEffect, useState } from "react";
import moment from "moment";
import axios from "axios";

export default function Home() {
    const [tourID, setTourID] = useState(0);
    const [tourInfo, settourInfo] = useState([]);
    const getData = async () => {
        try {
            const response = await axios.get(`${window.location.origin}/tour`);
            console.log(response);
            settourInfo(response.data);
        } catch (error) {
            console.log(error.response);
        }
    };
    useEffect(() => {
        getData();
    }, []);
    return (
        <>
            <StickyNavbar />

            <div className="flex flex-col-reverse md:flex-row">
                {/* <Testimonial /> */}
                {tourInfo
                    ? tourInfo.map((tour) => (
                          <TourSummary tourName={tour.name} tourID={tour.id} />
                      ))
                    : "Loading events"}
            </div>

            <Footer />
        </>
    );
}
