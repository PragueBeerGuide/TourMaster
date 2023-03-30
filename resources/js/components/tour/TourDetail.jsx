import {
    Tabs,
    TabsHeader,
    TabsBody,
    Tab,
    TabPanel,
  } from "@material-tailwind/react";
   
  export default function TourDetail({ tourhighlights, tourInclusions, tourMeeting, }) {
    const data = [
      {
        label: "Highlights",
        value: "highlightes",
        desc: {tourhighlights},
      },
      {
        label: "Meeting point",
        value: "meeting-point",
        desc: {tourMeeting},
      },
      {
        label: "Inclusions",
        value: "inclusions",
        desc: {tourInclusions},
      },
    ];
   
  return (
   
  <Tabs value="highlights">
    <TabsHeader>
      {data.map(({ label, value }) => (
        <Tab key={value} value={value}>
          {label}
        </Tab>
      ))}
    </TabsHeader>
    <TabsBody>
      {data.map(({ value, desc }) => (
        <TabPanel key={value} value={value}>
          {desc}
        </TabPanel>
      ))}
    </TabsBody>
  </Tabs>
  ); }
   