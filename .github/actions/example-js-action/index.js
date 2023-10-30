"use strict";

import { BaseAction, invoke } from "@action-badges/core";

class ExampleJsAction extends BaseAction {
  get label() {
    return "example";
  }

  async render() {
    return {
      message: "javascript",
      messageColor: "blue",
    };
  }
}

async function run() {
  return await invoke(ExampleJsAction);
}

run();
