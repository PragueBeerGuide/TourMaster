import { Card } from "@material-tailwind/react";
import React, { useEffect, useState } from "react";
import Updater from "./Button";
import axios from "axios";

export default function PersonalInfo({ formData, setFormData }) {
    const [eventInfo, setEventInfo] = useState([]);
    const getData = async () => {
        try {
            const response = await axios.get(`${window.location.origin}`);
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
                    <div className="flex justify-center m-5">
                    <strong>Starts:</strong> 18:00 -  <strong>Ends:</strong> 19:00
                    </div>
                    <div className="flex justify-center m-5">
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
