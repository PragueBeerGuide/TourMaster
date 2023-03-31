import React, { useState } from "react";
import TourDetail from "./TourDetail";
import { Navigate, Route, useNavigate } from "react-router";

import {
    Card,
    CardHeader,
    CardBody,
    CardFooter,
    Typography,
    Button,
    Tooltip,
} from "@material-tailwind/react";
import {
    ArrowRightCircleIcon,
    ArrowUturnDownIcon,
    ArrowUturnUpIcon,
    BanknotesIcon,
    CalendarDaysIcon,
    ChatBubbleBottomCenterTextIcon,
    StarIcon,
    UserGroupIcon,
    TicketIcon,
} from "@heroicons/react/24/solid";

export default function TourSummary({ tourDescription, tourID, tourhighlights, tourImage, tourInclusions, tourMeeting, tourTitle, }) {
    const [openDetails, setOpenDetails] = useState(false);
    const navigate = useNavigate();

    const handleClick = () => {
        navigate(`/calendar/${tourID}`);
    };

    return (
        <div className="w-full max-w-[30rem] shadow-lg">
            <Card>
                <CardHeader floated={false} color="blue-gray">
                    <img
                        src={tourImage}
                        alt="tour main image"
                        style={{ width: "100%", height: 200, objectFit: "cover" }}
                    />
                    <div className="to-bg-black-10 absolute inset-0 h-full w-full bg-gradient-to-tr from-transparent via-transparent to-black/60 " />
                </CardHeader>
                <CardBody>
                    <div className="mb-3 flex items-center justify-between">
                        <Typography
                            variant="h4"
                            color="blue-gray"
                            className="font-medium"
                        >
                            {tourTitle}
                        </Typography>
                        <Typography
                            color="blue-gray"
                            className="flex items-center gap-1.5 font-normal"
                        >
                            <StarIcon className="-mt-0.5 h-6 w-6 text-yellow-700" />
                            5.0
                        </Typography>
                    </div>
                    <Typography color="gray" className="text-justify">
                        {tourDescription}
                    </Typography>
                    <div className="group mt-8 flex justify-around items-center gap-3">
                        <Tooltip content="$59 per person">
                            <span className="cursor-pointer rounded-full border border-blue-500/5 bg-blue-500/5 p-3 text-blue-500 transition-colors hover:border-blue-500/10 hover:bg-blue-500/10 hover:!opacity-100 group-hover:opacity-70">
                                <BanknotesIcon className="h-6 w-6" />
                            </span>
                        </Tooltip>
                        <Tooltip content="Small groups">
                            <span className="cursor-pointer rounded-full border border-blue-500/5 bg-blue-500/5 p-3 text-blue-500 transition-colors hover:border-blue-500/10 hover:bg-blue-500/10 hover:!opacity-100 group-hover:opacity-70">
                                <UserGroupIcon className="h-6 w-6" />
                            </span>
                        </Tooltip>
                        <Tooltip content="Interactive tour">
                            <span className="cursor-pointer rounded-full border border-blue-500/5 bg-blue-500/5 p-3 text-blue-500 transition-colors hover:border-blue-500/10 hover:bg-blue-500/10 hover:!opacity-100 group-hover:opacity-70">
                                <ChatBubbleBottomCenterTextIcon className="h-6 w-6" />
                            </span>
                        </Tooltip>
                        <Tooltip content="Mobile tickets">
                            <span className="cursor-pointer rounded-full border border-blue-500/5 bg-blue-500/5 p-3 text-blue-500 transition-colors hover:border-blue-500/10 hover:bg-blue-500/10 hover:!opacity-100 group-hover:opacity-70">
                                <TicketIcon className="h-6 w-6" />
                            </span>
                        </Tooltip>
                        <Tooltip content="Daily departures">
                            <span className="cursor-pointer rounded-full border border-blue-500/5 bg-blue-500/5 p-3 text-blue-500 transition-colors hover:border-blue-500/10 hover:bg-blue-500/10 hover:!opacity-100 group-hover:opacity-70">
                                <CalendarDaysIcon className="h-6 w-6" />
                            </span>
                        </Tooltip>
                    </div>
                </CardBody>
                <CardFooter className="flex justify-between md:justify-around pt-3 gap-4">
                    <Button
                        size="lg"
                        className="flex justify-center items-center gap-1"
                        onClick={() => setOpenDetails(!openDetails)}
                    >
                        {!openDetails ? (
                            <>
                                <ArrowUturnDownIcon className="h-4 w-4" />
                                Show details
                            </>
                        ) : (
                            <>
                                <ArrowUturnUpIcon className="h-4 w-4" />
                                Hide details
                            </>
                        )}
                    </Button>
                    <Button
                        onClick={handleClick}
                        size="lg"
                        className={`flex justify-center items-center gap-4 ${
                            openDetails ? "bg-red-700" : ""
                        } `}
                    >
                        Book now <ArrowRightCircleIcon className="h-4 w-4" />
                    </Button>
                </CardFooter>
            </Card>

            {openDetails 
            ? 
            <TourDetail 
            tourhighlights = {tourhighlights}
            tourInclusions = {tourInclusions}
            tourMeeting = {tourMeeting}
            /> 
            : 
            ""
            }
        </div>
    );
}
