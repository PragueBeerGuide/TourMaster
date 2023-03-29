import { useState } from "react";
import React from "react";
import { Calendar } from "react-calendar";
import "react-calendar/dist/Calendar.css";
import DatePicker from "react-date-picker";
import moment from "moment";
import ListOfEvents from "./ListOfEvents";
import {
    Card,
    CardHeader,
    CardBody,
    CardFooter,
    Typography,
    Button,
    Tooltip
} from "@material-tailwind/react";
import Form from "../Form/UseMultistepForm";

export default function CustomCalendar() {
    const [dateState, setDateState] = useState(new Date());
    const [openDetails, setOpenDetails] = useState(false);

    const changeDate = (date) => {
        
        setDateState(date);
        setOpenDetails(true);
    };


return (
    <div className="w-full max-w-[30rem] shadow-lg flex flex-col items-center py-12">
         <Button size="lg" className="flex justify-center items-center gap-4 bg-red-700">
              Select a Date
            </Button>
        <Calendar
                value={dateState}
                onChange={changeDate}
                minDate={new Date()}
                minDetail="month"
            />

            <p>
                You've selected{" "}
                <b>{moment(dateState).format("MMMM Do YYYY")}</b>
            </p>

            {openDetails ? <><ListOfEvents date={dateState}/></> : null}

        

        </div>
    );
}