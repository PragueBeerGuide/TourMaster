import { Card } from "@material-tailwind/react";
import React, { useEffect, useState } from "react";
import Updater from "./Button";
import Confirmation from "./Confirmation";
import axios from "axios";

export default function PersonalInfo({ formData, setFormData }) {
    const [eventInfo, setEventInfo] = useState([]);
    const getData = async () => {
        try {
            const response = await axios.get("http://tourmaster.test/events");
            setEventInfo(response.data);
        } catch (error) {
            console.log(error.response);
        }
    };
    useEffect(() => {
        getData();
    }, []);

    return (
        <>
            <Card color="transparent" shadow={false}>
                <div className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
                    <div className="mb-4 flex flex-col gap-6"></div>
                    {eventInfo
                        ? eventInfo.map((event) => (
                              <div>
                                  Starts at:{event.start.split(" ")[1]} - Ends at:{event.end.split(" ")[1]}
                                  if it ends at all!
                              </div>
                          ))
                        : "Loading events"}

                    <div>
                        Adults 400 kč:&nbsp;&nbsp;
                        <Updater
                            setCount={() =>
                                setFormData({
                                    ...formData,
                                    count: Math.max(formData.count - 1, 0),
                                })
                            }
                            value={formData.negcount}
                        />
                        &nbsp;&nbsp;{formData.count}&nbsp;&nbsp;
                        <Updater
                            setCount={() =>
                                setFormData({
                                    ...formData,
                                    count: formData.count + 1,
                                })
                            }
                            value={formData.pluscount}
                        />
                    </div>
                </div>
            </Card>
        </>
    );
}
