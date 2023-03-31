import { useState } from "react";
import React from "react";
import { Calendar } from "react-calendar";
import "react-calendar/dist/Calendar.css";

import moment from "moment";
import ListOfEvents from "./ListOfEvents";

import {
    Card,
    CardHeader,
    CardBody,
    CardFooter,
    Typography,
    Button,
    Tooltip,
} from "@material-tailwind/react";

import { useParams } from "react-router-dom";




export default function CustomCalendar({tourTitle}) {
    const [tourId, setTourId] = useState(useParams().tourId);
    const [events, setEvents] = useState([]);
    const [dateState, setDateState] = useState(new Date());
    const [openDetails, setOpenDetails] = useState(false);
  
 

    const changeDate = (date) => {
        setDateState(date);
        setOpenDetails(true);
    };


    return (
        <div className="flex justify-center">
            <div className="w-full max-w-[30rem] shadow-lg flex flex-col items-center py-12 m-10">
          
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
