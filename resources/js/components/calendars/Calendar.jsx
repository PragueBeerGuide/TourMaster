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
    Tooltip,
} from "@material-tailwind/react";
import Form from "../Form/UseMultistepForm";

export function Booking() {
    const [dateState, setDateState] = useState(new Date());
    const [openDetails, setOpenDetails] = useState(false);

    const changeDate = (e) => {
        setDateState(e);
        setOpenDetails(e);
    };

    return (
        <div className="w-full max-w-[30rem] shadow-lg">
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

            {openDetails ? <ListOfEvents /> : null}
            <Form/>

        </div>
    );
}
