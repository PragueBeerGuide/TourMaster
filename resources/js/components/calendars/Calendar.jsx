import { useState } from "react";
import React from "react";
import { Calendar } from "react-calendar";
import "react-calendar/dist/Calendar.css";
import DatePicker from "react-date-picker";
import moment from "moment";
import ListOfEvents from "./ListOfEvents";
import { useEffect } from "react";
import {
    Card,
    CardHeader,
    CardBody,
    CardFooter,
    Typography,
    Button,
    Tooltip,
} from "@material-tailwind/react";
import Form from "../Form/UseMultistepForm";
import { useParams } from "react-router-dom";
import axios from "axios";
import TourSummary from "../tour/TourSummary";


export default function CustomCalendar({tourTitle}) {
    const [tourId, setTourId] = useState(useParams().tourId);
    const [events, setEvents] = useState([]);
    const [dateState, setDateState] = useState(new Date());
    const [openDetails, setOpenDetails] = useState(false);
    const formatedDate = moment().format("Y-MM-DD HH:mm:ss").split(" ")[0];
    const getData = async () => {
        
        try {
            console.log('making request', `${window.location.origin}/events/${tourId}/`);
            const response = await axios.get(
                `${window.location.origin}/events/${tourId}/${formatedDate}`
            );
            console.log(response.data)
            setEvents(response.data);
        } catch (error) {
            console.log(error);
            console.log(error.response);
        }
    };

    const changeDate = (date) => {
        setDateState(date);
        setOpenDetails(true);
    };
    useEffect(() => {
        getData();
        console.log(events);
    }, []);

    return (
        <div className="flex justify-center">
            <div className="w-full max-w-[30rem] shadow-lg flex flex-col items-center py-12 m-10">
            You've selected {tourTitle}
                <Button
                    size="lg"
                    className="flex justify-center items-center gap-4 bg-red-700"
                >
                    Select a Date
                </Button>
                <Calendar
                    value={dateState}
                    onChange={changeDate}
                    minDate={new Date()}
                    minDetail="month"
                />

                {/* Info sentance only appears if a specific date is chosen */}
                {dateState != Date() ? (
                    <p className="my-4">
                        You've selected{" "}
                        <b>{moment(dateState).format("MMMM Do YYYY")}</b>
                    </p>
                ) : (
                    ""
                )}

                {openDetails ? (
                    <>
                        <ListOfEvents
                            date={dateState}
                            tourId={tourId}
                            setTourId={setTourId}
                        />
                    </>
                ) : null}
            </div>
        </div>
    );
}
