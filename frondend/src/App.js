import { Switch } from "react-router-dom";
import "./App.scss";
import Admin from "./Pages/AdminPages/Admin";
import HomePage from "./Pages/ClientPages/HomePage";
import NewDetail from "./Pages/ClientPages/NewDetail/NewDetail";
import { AdminTemplate } from "./Templates/AdminTemplate";
import { MainTemplate } from "./Templates/MainTemplate";

function App() {
  return (
    <Switch>
      <MainTemplate exact path="/" Component={HomePage} />
      <MainTemplate exact path="/detail" Component={NewDetail} />

      <AdminTemplate exact path="/admin" Component={Admin} />
    </Switch>
  );
}

export default App;
